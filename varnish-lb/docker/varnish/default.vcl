vcl 4.0;
import directors;

backend app1 { .host = "app1"; .port = "80"; }
backend app2 { .host = "app2"; .port = "80"; }

sub vcl_init {
  new app = directors.round_robin();
  app.add_backend(app1);
  app.add_backend(app2);
}

sub vcl_recv {
  set req.backend_hint = app.backend();
}

sub vcl_backend_response {
  set beresp.ttl = 5s;
}

