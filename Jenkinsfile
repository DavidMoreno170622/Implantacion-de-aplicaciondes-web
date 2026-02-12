pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                echo 'Código descargado desde Git'
            }
        }

        stage('Levantar LAMP con Docker') {
            steps {
                sh '''
                docker-compose down || true
                docker-compose up -d
                '''
            }
        }

        stage('Desplegar CRUD') {
            steps {
                echo "Copiando archivos PHP al directorio www..."
                sh 'cp -r php/POO/* www/'
            }
        }

        stage('Comprobación') {
            steps {
                sh 'ls -l /opt/mi_crud_docker/www/'
            }
        }
    }
}
