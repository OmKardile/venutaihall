# DEPLOY

The cPanel deployment steps. Read RULES.md alongside this.

- Repo folder used by cPanel: /home/venutaihall/VCMhall-deploy. Never edit, upload or delete files inside it by hand; that makes the tree "dirty" and blocks deploys. Only use Update from Remote, then Deploy HEAD Commit.
- Before each deploy: back up public_html (Compress). After: hard-refresh venutaihall.com on a phone, one test booking, booked dates, admin login.
- Rollback: copy files back from public_html(backup-copy), or GLM makes a git revert commit (never a force push), then Update + Deploy.
- .cpanel.yml copies only *.html, styles.css, script.js and assets/. Server-only files stay untouched.
