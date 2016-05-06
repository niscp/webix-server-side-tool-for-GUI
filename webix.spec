Summary: web interface for linux system
%define version 1.17
Copyright: BIGDREAM APPS PVT. LTD., 
Group: Development/software
Name: webix
Prefix: /usr
Provides: webix
Release: 1
Source: index.php
URL: http://bigdreamapps.com
Version: %{version}
Buildroot: /tmp/webix
%description
%prep
%setup -q
%build
./configure CXXFLAGS=-03 --prefix=$RPM_BUILD_ROOT/usr
make
%install
rm -fr $RPM_BUILD_ROOT
make install
%clean
rm -rf $RPM_BUILD_ROOT
%files
%defattr(-,root,root)
/usr/bin/webix