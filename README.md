
#### Cisco
```
ip dhcp pool OFFICE
 network 10.59.48.0 255.255.255.0
 bootfile ipxe.pxe
 next-server 10.59.53.10
 default-router 10.59.48.1
 dns-server 8.8.8.8 8.8.4.4
 option 128 ascii http://raw.githubusercontent.com/jasonrm/ipxe-scripts/master/
 option 129 ascii boot.ipxe
```
