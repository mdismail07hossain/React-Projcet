import React from 'react';
import Navbar from '../Pages/Shear/Navbar';

import { Outlet } from 'react-router-dom';
import Footer from '../Pages/Shear/footer';

const Root = () => {
    return (
        <div>
            <Navbar/>
            <Outlet/>
            <Footer/>
        </div>
    );
};

export default Root;