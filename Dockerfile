#FROM registry.access.redhat.com/rhscl/httpd-24-rhel7
FROM registry.access.redhat.com/rhel7
USER root
RUN yum install -y httpd tcpdump net-tools iptraf-ng iperf3 wget
RUN chmod -R 777 /run/httpd && chmod -R 777 /etc/httpd/logs/
COPY assets/httpd.conf /etc/httpd/conf/httpd.conf
#RUN wget https://iperf.fr/download/source/iperf-3.1.3-source.tar.gz && tar -zxvf iperf-3.1.3-source.tar.gz && cd iperf-3.1.3 && ./configure && make && make install
EXPOSE 8080
USER 12345
CMD /usr/sbin/httpd -D FOREGROUND

