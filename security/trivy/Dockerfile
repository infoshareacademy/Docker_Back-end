FROM wordpress AS app
# ...
# ...

FROM app AS security-scan
RUN curl -sfL https://raw.githubusercontent.com/aquasecurity/trivy/master/contrib/install.sh | sh -s -- -b /usr/local/bin && \
    trivy fs /

FROM app

