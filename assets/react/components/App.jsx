import React, { Component } from 'react';

export class App extends Component {

    render () {
        return (
            <div>
                <p>Hello World  from React !</p>
                <p>{ this.props.name }</p>
                <p>{ dataLayout.message }</p>
            </div>
        );
    }
}