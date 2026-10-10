# RULES

Standing rules for the venutaihall.com repo. Read this and DEPLOY.md before any push or after any sandbox reset.

1. Never git push --force. Never push to main without me writing "PUSH NOW" in that same message. Day-to-day work goes to branch wip.
2. Push main to BOTH repos (primary OmKardile/venutaihall and mirror megatechzy-boop/VCMhall) and keep them identical. cPanel deploys from the mirror's main via the folder /home/venutaihall/VCMhall-deploy.
3. Never modify .cpanel.yml unless I explicitly ask. Never add any file to the repo that exists only on the server: booking-config.php, booking-store.php, admin/, error_log, .htaccess edits. Never copy backend files in .cpanel.yml.
4. Before every push to main, print and check: git diff --stat against the current main (list every changed file); confirm no .php, .htaccess, .cpanel.yml, robots.txt or sitemap.xml changed unless I asked; build clean; _check.py clean; ghp_ grep on staged changes = 0. If anything is unexpected, ABORT and tell me.
5. A deploy only adds or overwrites files; it never deletes. If a page or asset is removed or renamed in the repo, tell me the exact file names so I delete them in public_html by hand.
6. Do not rename or delete root .html pages or assets without telling me the list first.
7. No cron jobs, scheduled tasks, loops, or background reviewers.
8. Never print tokens, passwords or hashes in any reply, file or commit message.
9. Do not delete files without asking. Stop after each group of work and wait for my "go".
10. After any sandbox reset: read WORKLOG.md, RULES.md, DEPLOY.md and git log before doing anything.
