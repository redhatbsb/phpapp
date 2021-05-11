FROM registry.redhat.io/rhscl/httpd-24-rhel7
RUN yum install -y tcpdump net-tools iptraf-ng iperf3
RUN chmod -R 777 /run/httpd && chmod -R 777 /etc/httpd/logs/
COPY assets/httpd.conf /etc/httpd/conf/httpd.conf
EXPOSE 8080
USER 12345
