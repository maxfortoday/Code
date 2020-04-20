import React from 'react';

const UserContext = React.createContext();

function getUSerFromLocalStorage() {
 return localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user')) : {username:null, token: null};
}

function UserProvidor({children}) {
 // const [user,setUser] = React.useState({username:null, token: null});
 const [user,setUser] = React.useState(getUSerFromLocalStorage());

 const userLogin = user => {
  setUser(user);
  localStorage.setItem('user',JSON.stringify(user));
 }

 const userLogout = () => {
  setUser({username:null,token:null});
  localStorage.removeItem('user');
 };

 const [alert,setAlert] = React.useState({
  show: false,
  msg: "",
  type: "success"
 });

 const showAlert = ({msg,type = "success"}) => {
  setAlert({show : true, msg, type});
 }

 const hideAlert = () => {
  setAlert({...alert,show: false});
 }

 return (
  <UserContext.Provider value={{
   user,
   userLogin,
   userLogout,
   alert,
   showAlert,
   hideAlert
  }}>{children}</UserContext.Provider>
 )
}

export {UserProvidor, UserContext}