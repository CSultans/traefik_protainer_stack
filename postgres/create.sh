docker-compose up -d
sleep 10
# docker exec -u pgadmin:pgadmin -it pgdbadmin mkdir -m 700 /var/lib/pgadmin/storage/pgadmin4_pgadmin.org
# docker cp pgpassfile pgdbadmin:/tmp/pgpassfile
# docker exec -it -u 0 pgdbadmin chown pgadmin:pgadmin /tmp/pgpassfile
# docker exec -it -u 0 pgdbadmin mv /tmp/pgpassfile /var/lib/pgadmin/storage/pgadmin4_pgadmin.org
# docker exec -it -u 0 pgdbadmin chmod 600 /var/lib/pgadmin/storage/pgadmin4_pgadmin.org/pgpassfile
# docker cp servers.json pgdbadmin:/tmp/servers.json
docker exec -it -u 0 pgdbadmin /venv/bin/python3 /pgadmin4/setup.py --load-servers /tmp/servers.json