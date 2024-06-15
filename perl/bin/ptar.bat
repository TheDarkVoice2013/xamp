@rem = '--*-Perl-*--
@echo off
if "%OS%" == "Windows_NT" goto WinNT
IF EXIST "%~dp0perl.exe" (
"%~dp0perl.exe" -x -S "%0" %1 %2 %3 %4 %5 %6 %7 %8 %9
) ELSE IF EXIST "%~dp0..\..\bin\perl.exe" (
"%~dp0..\..\bin\perl.exe" -x -S "%0" %1 %2 %3 %4 %5 %6 %7 %8 %9
) ELSE (
perl -x -S "%0" %1 %2 %3 %4 %5 %6 %7 %8 %9
)

goto endofperl
:WinNT
IF EXIST "%~dp0perl.exe" (
"%~dp0perl.exe" -x -S %0 %*
) ELSE IF EXIST "%~dp0..\..\bin\perl.exe" (
"%~dp0..\..\bin\perl.exe" -x -S %0 %*
) ELSE (
perl -x -S %0 %*
)

if NOT "%COMSPEC%" == "%SystemRoot%\system32\cmd.exe" goto endofperl
if %errorlevel% == 9009 echo You do not have Perl in your PATH.
if errorlevel 1 goto script_failed_so_exit_with_non_zero_val 2>nul
goto endofperl
@rem ';
#!/usr/bin/perl
#line 29
use strict;
use warnings;

BEGIN { pop @INC if $INC[-1] eq '.' }
use File::Find;
use Getopt::Std;
use Archive::Tar;
use Data::Dumper;

# Allow historic support for dashless bundled options
#  tar cvf file.tar
# is valid (GNU) tar style
@ARGV && $ARGV[0] =~ m/^[DdcvzthxIC]+[fT]?$/ and
    unshift @ARGV, map { "-$_" } split m// => shift @ARGV;
my $opts = {};
getopts('Ddcvzthxf:ICT:', $opts) or die usage();

### show the help message ###
die usage() if $opts->{h};

### enable debugging (undocumented feature)
local $Archive::Tar::DEBUG                  = 1 if $opts->{d};

### enable insecure extracting.
local $Archive::Tar::INSECURE_EXTRACT_MODE  = 1 if $opts->{I};

### sanity checks ###
unless ( 1 == grep { defined $opts->{$_} } qw[x t c] ) {
    die "You need exactly one of 'x', 't' or 'c' options: " . usage();
}

my $compress    = $opts->{z} ? 1 : 0;
my $verbose     = $opts->{v} ? 1 : 0;
my $file        = $opts->{f} ? $opts->{f} : 'default.tar';
my $tar         = Archive::Tar->new();

if( $opts->{c} ) {
    my @files;
    my @src = @ARGV;
    if( $opts->{T} ) {
      if( $opts->{T} eq "-" ) {
        chomp( @src = <STDIN> );
	} elsif( open my $fh, "<", $opts->{T} ) {
	    chomp( @src = <$fh> );
	} else {
	    die "$0: $opts->{T}: $!\n";
	}
    }

    find( sub { push @files, $File::Find::name;
                print $File::Find::name.$/ if $verbose }, @src );

    if ($file eq '-') {
        use IO::Handle;
        $file = IO::Handle->new();
        $file->fdopen(fileno(STDOUT),"w");
    }

    my $tar = Archive::Tar->new;
    $tar->add_files(@files);
    if( $opts->{C} ) {
        for my $f ($tar->get_files) {
            $f->mode($f->mode & ~022); # chmod go-w
        }
    }
    $tar->write($file, $compress);
} else {
    if ($file eq '-') {
        use IO::Handle;
        $file = IO::Handle->new();
        $file->fdopen(fileno(STDIN),"r");
    }

    ### print the files we're finding?
    my $print = $verbose || $opts->{'t'} || 0;

    my $iter = Archive::Tar->iter( $file );

    while( my $f = $iter->() ) {
        print $f->full_path . $/ if $print;

        ### data dumper output
        print Dumper( $f ) if $opts->{'D'};

        ### extract it
        $f->extract if $opts->{'x'};
    }
}

### pod & usage in one
sub usage {
    my $usage .= << '=cut';
=pod

=head1 NAME

ptar - a tar-like program written in perl

=head1 DESCRIPTION

ptar is a small, tar look-alike program that uses the perl module
Archive::Tar to extract, create and list tar archives.

=head1 SYNOPSIS

    ptar -c [-v] [-z] [-C] [-f ARCHIVE_FILE | -] FILE FILE ...
    ptar -c [-v] [-z] [-C] [-T index | -] [-f ARCHIVE_FILE | -]
    ptar -x [-v] [-z] [-f ARCHIVE_FILE | -]
    ptar -t [-z] [-f ARCHIVE_FILE | -]
    ptar -h

=head1 OPTIONS

    c   Create ARCHIVE_FILE or STDOUT (-) from FILE
    x   Extract from ARCHIVE_FILE or STDIN (-)
    t   List the contents of ARCHIVE_FILE or STDIN (-)
    f   Name of the ARCHIVE_FILE to use. Default is './default.tar'
    z   Read/Write zlib compressed ARCHIVE_FILE (not always available)
    v   Print filenames as they are added or extracted from ARCHIVE_FILE
    h   Prints this help message
    C   CPAN mode - drop 022 from permissions
    T   get names to create from file

=head1 SEE ALSO

L<tar(1)>, L<Archive::Tar>.

=cut

    ### strip the pod directives
    $usage =~ s/=pod\n//g;
    $usage =~ s/=head1 //g;

    ### add some newlines
    $usage .= $/.$/;

    return $usage;
}


__END__
:endofperl
