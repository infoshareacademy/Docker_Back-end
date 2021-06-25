FROM golang:1.12-alpine
WORKDIR /project
ENV GOPATH=/project
COPY main.go .
RUN go build .
CMD ["/project/project"]

