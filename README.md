## How to Configure GitHub Deploy Workflow (Action)

### Create the SSH keys

Run this command in a terminal window
`ssh-keygen -t rsa -b 4096 -C "your_email@example.com"`

Find the private and public key files on your local machine at username/.ssh
 - Private: id_rsa
 - Public: id_rsa.pub

In your **Nexcess account**, click on your account name in the top right corner and select SSH Keys.

Select Add Key and copy/paste the Public Key (contents of id_rsa.pub). Make sure to label your key properly so you can tell what the key is being used for.

In your **GitHub repository** go to Settings > Secrets and variables > Actions.

### Add first two secrets: 

 - DEPLOY_SSH_KEY = Private Key (Contents of id_rsa)
 - NEXCESS_LOCATION = `username@hostname:/home/a78dae25/b03c600fb5.nxcli.io/html/wp-content/themes/`
 - -(if that doesnt work, try: `username@hostname:/b03c600fb5.nxcli.io/html/wp-content/themes/`)


### Retrieve the allowed hosts key

SSH into the server:
`ssh username@host_name`
Then enter the password.

Run this command to find the Allowed host key
`ssh-keyscan host_name`

Copy the entire line that starts with the host_name followed by "ssh-rsa"

### Add the third secret to the GitHub repository
In your **GitHub repository** go to Settings > Secrets and variables > Actions.

- NEXCESS_HOST = Allowed host key (Contents of line that begins with host_name followed by "ssh-rsa")


Now when you merge changes into the main branch, they will automatically deploy to the host.


Note: When running commands, replace "host_name" with your hostname from Nexcess, and "username" with your username from nexcess. The hostname should look something like a1b2c3d4e5f6g7.nxcli.io, and the username should be a random alphanumeric string.

Note: You should be able to reuse the RSA Key on multiple sites so you don't have to regenerate it everytime. Keep the public, private and allowed host key's in a secure place.

[NEXCESS Documentation](https://www.nexcess.net/blog/deploy-wordpress-with-github-actions/)

## Kinsta deployment secrets (this project)

SSH key files on local machine:
- Private: `/Users/randalpope/.ssh/kinsta_deploy_key`
- Public: `/Users/randalpope/.ssh/kinsta_deploy_key.pub`

### Global user secret
- `KINSTA_USER = elkhartplastics` (fallback if matrix user secret is missing)

### Staging (branch: `staging`)
For matrix host `ELKHART` (staging):
- `KINSTA_STAGING_ELKHART_IP = 163.192.209.112`
- `KINSTA_STAGING_ELKHART_PATH = /www/elkhartplastics_765/public/wp-content/themes/meyers-companies-theme`
- `KINSTA_STAGING_ELKHART_PORT = 42785`
- `KINSTA_STAGING_ELKHART_USER = elkhartplastics` (optional; falls back to `KINSTA_USER`)

For matrix host `AMERIKART` (staging):
- `KINSTA_STAGING_AMERIKART_IP = 163.192.209.112`
- `KINSTA_STAGING_AMERIKART_PATH = /www/amerikart_237/public/wp-content/themes/meyers-companies-theme`
- `KINSTA_STAGING_AMERIKART_PORT = 36188`
- `KINSTA_STAGING_AMERIKART_USER = amerikart` (optional; falls back to `KINSTA_USER`)

### Live (branch: `main`)
For matrix host `ELKHART` (live):
- `KINSTA_LIVE_ELKHART_IP = 163.192.209.112`
- `KINSTA_LIVE_ELKHART_PATH = /www/elkhartplastics_765/public/wp-content/themes/meyers-companies-theme `
- `KINSTA_LIVE_ELKHART_PORT = 38888`
- `KINSTA_LIVE_ELKHART_USER = elkhartplastics` (optional; falls back to `KINSTA_USER`)

For matrix host `AMERIKART` (live):
- `KINSTA_LIVE_AMERIKART_IP = 163.192.209.112`
- `KINSTA_LIVE_AMERIKART_PATH = /www/amerikart_237/public/wp-content/themes/meyers-companies-theme `
- `KINSTA_LIVE_AMERIKART_PORT = 59730`
- `KINSTA_LIVE_AMERIKART_USER = amerikart` (optional; falls back to `KINSTA_USER`)

### Required shared secret
- `SSH_PRIVATE_KEY` = contents of `/Users/randalpope/.ssh/kinsta_deploy_key` (private key)

### Optional targets approach (not used with matrix)
- `KINSTA_STAGING_TARGETS`, `KINSTA_LIVE_TARGETS` are still supported in a CSV style `IP:PATH:PORT`, but this project is configured to use matrix server secrets rather than this fallback.