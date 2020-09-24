pipeline {
  agent any
  stages {
    stage('Download') {
      steps {
        sh 'sudo cp -r ./root/* /var/www/html/apps/esquilax/'
      }
    }

    stage('Migrar') {
      steps {
        sh 'sudo cp /home/walo/secrets/.env /var/www/html/apps/esquilax/'
        sh 'cd /var/www/html/apps/esquilax ; sudo php artisan migrate'
      }
    }

    stage('Fix Permissions') {
      steps {
        sh 'sudo chown -R www-data:www-data /var/www/html/apps/esquilax'
      }
    }

  }
}