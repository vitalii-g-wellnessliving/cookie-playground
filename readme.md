Site names and roles
--------------------

`site-a.example.local` - Web server that emulates client, which uses `site-b.example.local` as a server which has some authentication.

In `site-a.example.local` there is only index page, with two buttons: `Login` will send request to fake endpoint of `site-b.example.local` and receive session cookie, `Generic request` will send some request to `site-b.example.local`. 

Both of requests print responses to the browser console. Fake session cookie value is a current time stamp, which allows to see if the cookie was updated.

In `site-b.example.local` there are two pages:

- `index.php` - main page, will display cookies from request
- `login.php` page - will send fake session cookie and return the cookies from request

How to run the code
-------------------

Ensure that these DNS names are added to your hosts file or resolve it in any other way to `127.0.0.1`:
- site-a.example.local
- site-b.example.local

For example:

```bash
sudo echo "127.0.0.1 site-a.example.local" >> /etc/hosts
sudo echo "127.0.0.1 site-b.example.local" >> /etc/hosts
```

Then you can run the server with:

```bash
docker compose up -d
```


