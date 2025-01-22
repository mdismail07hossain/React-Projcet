import axios from "axios";
import { useEffect, useState } from "react";


const User = () => {
    const [user, setUser] = useState([]);
 

    const loaderUser = async()=>{ 
        const result= await axios.get("http://localhost/react_project/React-Projcet/Backend/user.php");
        setUser(result.data.phpuser);
        console.log(result.data.phpuser);
      };
    
    
      useEffect(()=>{ 
        loaderUser();
      }, []);
    return (
        <div>
            <div className="overflow-x-auto p-6">
      <table className="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead>
          <tr className="bg-gray-200">
            <th className="px-4 py-2 text-left text-sm font-semibold text-gray-600">ID</th>
            <th className="px-4 py-2 text-left text-sm font-semibold text-gray-600">Name</th>
            <th className="px-4 py-2 text-left text-sm font-semibold text-gray-600">Email</th>
            <th className="px-4 py-2 text-left text-sm font-semibold text-gray-600">Number</th>
            <th className="px-4 py-2 text-left text-sm font-semibold text-gray-600">Action</th>
          </tr>
        </thead>
        <tbody>
          {user.map((row,index) => (
            <tr key={index} className="border-t">
              <td className="px-4 py-2 text-sm text-gray-700">{index+1}</td>
              <td className="px-4 py-2 text-sm text-gray-700">{row.name}</td>
              <td className="px-4 py-2 text-sm text-gray-700">{row.email}</td>
              <td className="px-4 py-2 text-sm text-gray-700">{row.number}</td>
              <td className="px-4 py-2 text-sm text-gray-700">
                <button className="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                  Edit
                </button>
                <button className="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 ml-2">
                  Delete
                </button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
        </div>
    );
};

export default User;