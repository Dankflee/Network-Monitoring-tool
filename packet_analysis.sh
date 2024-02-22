#! /bin/bash
tcpdump -ne -c 3000 > packets
grep "ARP" packets > arp
grep "UDP" packets > udp
grep "IPv4" packets > ip
cut -d " " -f 1 arp > timestamp_arp
cut -d " " -f 2 arp > sourcemac_arp
cut -d " " -f 4 arp > dmac_arp
cut -d "," -f 1 dmac_arp > destinationmac_arp
cut -d " " -f 12 arp > sourceip_arp
cut -d " " -f 14 arp > dip_arp
cut -d "," -f 1 dip_arp > destinationip_arp
cut -d " " -f 16 arp > X
grep -Eo '[0-9]{1,4}' X > plength_arp

cut -d " " -f 1 udp > timestamp_udp
cut -d " " -f 2 udp > sourcemac_udp
cut -d " " -f 4 udp > dmac_udp
cut -d "," -f 1 dmac_udp > destinationmac_udp
cut -d " " -f 10 udp > Sourceip_udp
cut -d " " -f 12 udp > dip_udp
cut -d "." -f 1-4 dip_udp > destinationip_udp
cut -d "." -f 5 dip_udp > d_port_udp
cut -d ":" -f 1 d_port_udp > destinationport_udp
cut -d " " -f 16 udp > X_udp #15
cut -d . -f 5 Sourceip_udp > sourceport_udp
cut -d . -f 1-4 Sourceip_udp > sourceip_udp
grep -Eo '[0-9]{1,4}' X_udp > plength_udp

cut -d " " -f 1 ip > timestamp_ip
cut -d " " -f 2 ip > sourcemac_ip
cut -d " " -f 4 ip > dmac_ip
cut -d "," -f 1 dmac_ip > destinationmac_ip
cut -d " " -f 10 ip > sip_ip
cut -d " " -f 12 ip > dip_ip
cut -d "." -f 1-4 dip_ip > destinationip_ip
cut -d "." -f 5 dip_ip > d_port_ip
cut -d ":" -f 1 d_port_ip > destinationport_ip
cut -d " " -f 15 ip > length_ip
cut -d . -f 5 sip_ip > sourceport_ip
cut -d . -f 1-4 sip_ip > sourceip_ip
grep -Eo '[0-9]{1,4}' length_ip > plength_ip

cut -d " " -f 1 tcp > timestamp_tcp
cut -d " " -f 2 tcp > sourcemac_tcp
cut -d " " -f 4 tcp > dmac_tcp
cut -d "," -f 1 dmac_tcp > destinationmac_tcp
cut -d " " -f 10 tcp > sip_tcp
cut -d " " -f 12 tcp > dip_tcp
cut -d "." -f 1-4 dip_tcp > destinationip_tcp
cut -d "." -f 5 dip_tcp > d_port_tcp
cut -d ":" -f 1 d_port_tcp > destinationport_tcp
cut -d " " -f 15 tcp > length_tcp
cut -d . -f 5 sip_tcp > sourceport_tcp
cut -d . -f 1-4 sip_tcp > sourceip_tcp
grep -Eo '[0-9]{1,4}' length_tcp > plength_tcp
