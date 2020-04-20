import React, { useState } from "react";

// strapi function
import loginUser from '../strapi/loginUser';
import registerUser from '../strapi/registerUser';
// handle user 
import {useHistory} from 'react-router-dom';
import {UserContext} from '../context/user';

export default function Login() {
  const history = useHistory();

  // setup user context
  const {userLogin,alert,showAlert} = React.useContext(UserContext);
  
  // state values
  const [email,setEmail] = React.useState('');
  const [password,setPassword] = React.useState('');
  const [username,setUsername] = React.useState('default');
  const [isMember,setIsMember] = React.useState(true);

  let isEmpty = !email || !password || !username || alert.show;

  const toggleMember = () => {
    setIsMember(prevMember => {
      let isMember = !prevMember;
      isMember ? setUsername('default') : setUsername('');
      return isMember;
    })
  };

  const handleSubmit = async e => {
    showAlert({
      msg: 'accessing user data, please wait'
    })
    // alert
    e.preventDefault();
    let response;
    if(isMember) {
      response = await loginUser({email,password})
    } else {
      response = await registerUser({email,password,username});
    }
    if(response) {
      // console.log(response);
      
      const {jwt:token,user:{username}} = response.data;
      const newUser = {token,username};
      userLogin(newUser);
      showAlert({
        msg: `you are loged in ${username}`
      });
      history.push('/products');
    } else {
      showAlert({
        msg: 'there was a mistake, try again...',
        type: 'danger'
      })
    }
  };

  return (
    <section className="section form">
      <h2 className="section-title">{isMember ? 'sing in' : 'register'}</h2>
      <form className="login-form">
        {/* single input */}
        <div className="form-control">
          <label htmlFor="email">email</label>
          <input type="email" id="email" value={email} onChange={e => setEmail(e.target.value)}/>
        </div>
        {/* end of single input */}
        {/* single input */}
        <div className="form-control">
          <label htmlFor="password">password</label>
          <input type="password" id="password" value={password} onChange={e => setPassword(e.target.value)}/>
        </div>
        {/* end of single input */}
        {/* single input */}
        {!isMember && 
        <div className="form-control">
          <label htmlFor="email">username</label>
          <input type="text" id="username" value={username} onChange={e => setUsername(e.target.value)}/>
        </div>
        }
        {/* end of single input */}
        {/* empty form text */}
        {isEmpty && 
          <p className="form-empty">please fill out all form fields</p>
        }
        {/* submit btn */}
        {!isEmpty && 
          <button type="submit" onClick={handleSubmit} className="btn primary btn-block">submit</button>
        }
        {/* register link */}
        <p className="register-link">
          {isMember ? 'need to register' : 'already a member'}
          <button type="button" onClick={toggleMember}>click here</button>
        </p>
      </form>
    </section>
  )
}
