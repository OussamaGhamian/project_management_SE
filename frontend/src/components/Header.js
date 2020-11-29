import React from 'react';
import { Dropdown, Navbar, Nav } from 'react-bootstrap';
import logo from '../like.png';
import { useLocation } from 'react-router-dom';

export default function Header( { Items } ) {
    const currentURL = useLocation().pathname;
    return (
        <div>
            <Navbar bg="primary" expand="md">
                <Navbar.Brand href="/"><img src={logo} width='80px' alt='logo'></img><span>ORG NAME</span></Navbar.Brand>
                <Navbar.Toggle aria-controls="basic-navbar-nav" />
                <Navbar.Collapse id="basic-navbar-nav">
                    <Nav className="ml-auto">
                        {Items.map((item) => {
                            return (
                                <li className="nav-item" key={item.title}>
                                    <a className="nav-link " href={item.href}> {item.title} </a>
                                </li>
                            );
                        })}
                        {currentURL === '/' ? null : < Dropdown >
                            <Dropdown.Toggle variant="success" id="dropdown-basic">
                                My Account</Dropdown.Toggle>
                            <Dropdown.Menu>
                                <Dropdown.Item href="#/action-1">Edit Profile</Dropdown.Item>
                                <Dropdown.Item href="/">Log Out!</Dropdown.Item>
                            </Dropdown.Menu>
                        </Dropdown>}

                    </Nav>

                </Navbar.Collapse>
            </Navbar>
        </div >
    );
}