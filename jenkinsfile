
pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main',
                    url: 'https://github.com/rislarasati5/KSI2025.git'
            }
        }

        stage('Run PHP File') {
            steps {
                powershell 'php index.php'
            }
        }
    }
}
