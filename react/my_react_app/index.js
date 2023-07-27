import React from 'react'
import ReactDOM from 'react-dom/client'
import MonPremierComposant from "../jsx/MonPremierComposant";

const root = ReactDOM.createRoot(document.getElementById('react-app'))

const element = <React.StrictMode><MonPremierComposant /></React.StrictMode>;

root.render(element);