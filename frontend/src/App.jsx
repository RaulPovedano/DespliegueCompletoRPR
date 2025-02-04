import { useEffect, useState } from 'react';
import './App.css'
function App() {
 const [message, setMessage] = useState('');
 useEffect(() => {
 fetch('/api/rpr')
 .then((res) => res.json())
 .then((data) => setMessage(data.message));
 }, []);
 return (
 <div>
 <h1>Frontend en React de Raul Povedano Ruiz</h1>
 <p>Esta aplicación se conecta al backend de Symfony pidiéndole una respuesta</p>
 <p>respuesta del Backend: {message || 'Esperando backend de Raul...'}</p>
 </div>
 );
}
export default App;