import React from 'react';
import Item from './ExpenceItem';
import {MdDelete} from 'react-icons/md';

const ExpenceList = ({expences, handleDelete, handleEdit, clearItems}) => {
 return (
  <>
   <ul className="list">
    {expences.map(expence => {
     return <Item 
     key={expence.id} 
     expence={expence} 
     handleDelete={handleDelete}
     handleEdit={handleEdit}
     />
    })}
   </ul>
   {
    expences.length > 0 && 
    <button className="btn" onClick={clearItems}
    >
     clear expences
     <MdDelete className="btn-icon" />
    </button>
   }
  </>
 )
}

export default ExpenceList