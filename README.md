* Para iniciar o container com Postgres 9.3

> docker run -ti -p 5433:5432 --name postgres carolinesalibdockerhub/postgres9.3:1.0 /bin/bash

* Para iniciar o container com Postgres 9.4

> docker run -ti -p 5434:5432 --name postgres2 carolinesalibdockerhub/postgres9.4:1.0 /bin/bash

* Para iniciar o container com Apache2 comunicando com Postgres

> docker run -ti -p 8080:80 --net:host carolinesalibdockerhub/apache2:1.0 /bin/bash