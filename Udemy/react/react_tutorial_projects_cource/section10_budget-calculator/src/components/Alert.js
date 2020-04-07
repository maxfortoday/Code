import React from 'react'

const Alets = ({type,text}) => {
 return (
  <div className={`alert alert-${type}`}>
   {text}
  </div>
 )
}

export default Alets