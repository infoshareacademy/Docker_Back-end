FROM alpine:3
ENTRYPOINT ["/kompose"]
ARG KOMPOSE_VERSION
RUN apk --no-cache add curl && \
    curl -L https://github.com/kubernetes/kompose/releases/download/v${KOMPOSE_VERSION}/kompose-linux-amd64 -o kompose && \
    chmod +x kompose

