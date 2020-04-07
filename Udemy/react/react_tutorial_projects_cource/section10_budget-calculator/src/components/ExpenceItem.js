import React from 'react';
import {MdEdit, MdDelete} from 'react-icons/md';

const ExpenceItem = ({expence, handleDelete, handleEdit}) => {
 const {id, charge, amount} = expence;
 return (
  <li className="item">
   <div className="info">
    <span className="expence">{charge}</span>
    <span className="amount">${amount}</span>
   </div>
   <div>
    <button className="edit-btn" aria-label='edit button' onClick={()=>handleEdit(id)}><MdEdit/></button>
    <button className="clear-btn" aria-label='delete button' onClick={()=>handleDelete(id)}><MdDelete/></button>
   </div>
  </li>
 )
}

export default ExpenceItem