FROM golang:1.12-alpine AS build
WORKDIR /project
COPY main.go .
RUN GOPATH=/project go build .

FROM alpine:3
COPY --from=build /project/project /project
CMD ["/project"]

