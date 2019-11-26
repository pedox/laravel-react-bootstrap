import React from 'react'
import ReactDOM from 'react-dom'
import { Container } from 'reactstrap'
import Super from './components/Super'

function App() {
  return (
    <Container>
      <div className="mt-5">
        <Super />
      </div>
    </Container>
  )
}

if (document.getElementById('app')) {
  ReactDOM.render(<App />, document.getElementById('app'))
}
