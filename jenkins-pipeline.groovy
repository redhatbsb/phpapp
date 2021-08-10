 node('maven') {
    stage('build') {
        echo 'building app :)'
    }
    stage('verify') {
        echo 'dummy verification....'
    }
    stage('deploy') {
        input 'Manual Approval'
    }
    stage('promoting to QA') {
       echo 'fake stage...'
       sleep 5
    }
}
