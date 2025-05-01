pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/your-username/your-php-repo.git'
            }
        }

        stage('Syntax Check') {
            steps {
                // You can change index.php to any main PHP file or loop through all PHP files
                sh 'php -l index.php'
            }
        }

        stage('Deploy or Final Step') {
            steps {
                echo 'No tests to run. Proceeding with next steps...'
                // Add deploy or artifact step if needed
            }
        }
    }
}
