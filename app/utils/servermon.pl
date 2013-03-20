#!/usr/bin/perl -w
use strict;
use Net::MySQL;

my @services = ('apache2', 'mysql');
my @servers = ('localhost');

my $host = `/bin/hostname`;
chomp $host;

foreach my $server (@servers) { 
	printf("Connecting to %s\n", $server);
	my $mysql = Net::MySQL->new(
		hostname 	=> $server,
		database		=> '',
		user     		=> 'root',
		password 	=> ''
	);
  $mysql->query("SHOW FULL PROCESSLIST");
  my $record_set = $mysql->create_record_iterator;
  while (my $record = $record_set->each) {
      printf "First column: %s Next column: %s\n",
          $record->[0], $record->[1];
  }
  $mysql->close;	
	foreach my $service (@services) { }
}

