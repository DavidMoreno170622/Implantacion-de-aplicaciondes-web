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
                sh 'docker-compose up -d'
            }
        }

        stage('Desplegar CRUD') {
            steps {
                sh 'cp -r php/POO/* /opt/mi_crud_docker/www/'
            }
        }

        stage('Comprobación') {
            steps {
                sh 'ls -l /opt/mi_crud_docker/www/'
            }
        }
    }
}
