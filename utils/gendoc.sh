#!/bin/bash
clear 
apigen --debug --todo yes \
		--report /home/firewall/www/vs.profferlabs.com/docs/nodoc.txt \
		--destination /home/firewall/www/vs.profferlabs.com/docs/ \
		--source /home/firewall/www/vs.profferlabs.com \
		--exclude /home/firewall/www/vs.profferlabs.com/junk \
		--exclude /home/firewall/www/vs.profferlabs.com/docs \
		--exclude /home/firewall/www/vs.profferlabs.com/nbproject \
		--exclude /home/firewall/www/vs.profferlabs.com/app/library/smarty \
		--exclude /home/firewall/www/vs.profferlabs.com/app/library/facebook \
		--exclude /home/firewall/www/vs.profferlabs.com/app/library/cloudmade \
		--exclude /home/firewall/www/vs.profferlabs.com/app/library/openinviter \
		--exclude /home/firewall/www/vs.profferlabs.com/app/library/PHPMailer_5.2.2 \
		--exclude /home/firewall/www/vs.profferlabs.com/media \
		--exclude /home/firewall/www/vs.profferlabs.com/js \
		--exclude /home/firewall/www/vs.profferlabs.com/utils/gendoc.sh \
		--exclude /home/firewall/www/vs.profferlabs.com/rockmongo \
		--exclude /home/firewall/www/vs.profferlabs.com/cache \
		--exclude /home/firewall/www/vs.profferlabs.com/app/config/development.php \
		--exclude /home/firewall/www/vs.profferlabs.com/app/views
