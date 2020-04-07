import React,{useState,useEffect} from 'react';
import './App.css';
import Alert from './components/Alert';
import ExpenceList from './components/ExpenceList';
import ExpenceForm from './components/ExpenceForm';
import uuid from 'uuid/v4';

const initialExpences = localStorage.getItem("expences") ? JSON.parse(localStorage.getItem('expences')) : [];

function App() {
  // state values
  // all expence, add expence
  const [expences, setExpences] = useState(initialExpences);
  // single expence
  const [charge, setCharge] = useState('');
  // single amount
  const [amount, setAmount] = useState('');
  // alert
  const [alert, setAlert] = useState({show:false});
  // edit
  const [edit, setEdit] = useState(false);
  // edit item
  const [id, setId] = useState(0);
  // use effect
  useEffect(() => {
    localStorage.setItem("expences", JSON.stringify(expences));
  },[expences]);

  // functionality
  // handle charge
  const handleCharge = e => {
    setCharge(e.target.value);
  }

  // handle amount
  const handleAmount = e => {
    setAmount(e.target.value);
  }

  // handle alert
  const handleAlert = ({type,text}) => {
    setAlert({show: true,type,text});
    setTimeout(() => {
      setAlert({show:false});
    },3000)
  }

  // handle submit
  const handleSubmit = e => {
    e.preventDefault();
    if(charge !== '' && amount > 0) {
      if(edit) {
        let tempExpences = expences.map(item => {
          return item.id === id ? {...item,charge,amount} : item;
        })
        setExpences(tempExpences);
        setEdit(false);
        handleAlert({type:'success', text: 'item edited'})
      } else {
        const singleExpence = {id:uuid(),charge,amount};
        setExpences([...expences,singleExpence]);
        handleAlert({type:'success', text: 'item added'})
      }
      setCharge('');
      setAmount('');
    } else {
      // handle alert caller
      handleAlert({type:'danger', text: 'please fill all the inputs'})
    }
  }

  // clear all items
  const clearItems = () => {
    setExpences([])
    handleAlert({type: 'danger', text: 'list was cleared'})
  }

  // handle delete
  const handleDelete = id => {
    let tempExpences = expences.filter(item => item.id !== id);
    setExpences(tempExpences);
    handleAlert({type: 'danger', text: 'item deleted'})
  }

  // handle edit
  const handleEdit = id => {
    let expence = expences.find(item => item.id === id);
    let {charge, amount} = expence;
    setCharge(charge);
    setAmount(amount);
    setEdit(true);
    setId(id);
  }

  return (
    <>
      {
        alert.show && <Alert type={alert.type} text={alert.text} />
      }
      <h1>budget calculator</h1>
      <main className="App">
      <ExpenceForm 
        charge={charge}
        amount={amount}
        handleCharge={handleCharge}
        handleAmount={handleAmount}
        handleSubmit={handleSubmit}
        edit={edit}
      />
      <ExpenceList 
        expences={expences}
        handleDelete={handleDelete}
        handleEdit={handleEdit}
        clearItems={clearItems}
      />
      </main>
      <h1>
        total spending : <span className="total">
          ${expences.reduce((acc,curr) => {
            return (acc += parseInt(curr.amount))
          }, 0)}
        </span>
      </h1>
    </>
  );
}

export default App;
