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