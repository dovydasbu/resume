import React, { Component } from 'react'
import styled from 'styled-components'
import Fullscreen from "react-full-screen"

import PlayingArea from './components/PlayingArea'
import Button from './components/Button'
import Sidebar from './components/Sidebar'

const GameWrap = styled.div`;
  height: inherit;
  min-height: inherit;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
`;

const BottomButtonWrap = styled.div`
  display: flex;
  justify-content: space-between;  
  align-items: center;
  margin-top: 15px;
`

const FullscreenBtn = styled(Button)`
  background: #dfdfdf;
  margin: 0 !important;
  
  @media(max-width: 1900px) {
    display: none;
  }
`

const HamburgerBtn = styled(Button)`
  background: #dfdfdf;
  z-index: 99;
  font-weight: 700;
  z-index: 999999;
  margin: 0 !important;
`

class App extends Component {
  constructor(props) {
    super(props);

    this.state = {
      isFullScreen: false,
      isSidebarOpen: false
    };

    this.toggleFullScreen = this.toggleFullScreen.bind(this);
    this.toggleSidebar = this.toggleSidebar.bind(this);
  }

  componentDidMount() {
    document.addEventListener('keydown', (e) => {
      if(e.key === 'Escape' && this.state.isSidebarOpen) {
        this.toggleSidebar()
      }
    })
  }

  toggleFullScreen() {
    this.setState((prevState) => ({
      isFullScreen: ! prevState.isFullScreen
    }));
  }

  toggleSidebar() {
    this.setState((prevState) => ({
      isSidebarOpen: ! prevState.isSidebarOpen
    }))
  }

  render() {
    const { isSidebarOpen } = this.state

    return (
      <GameWrap>
        <div>
          <Sidebar isOpen={isSidebarOpen}/>

          <Fullscreen
            enabled={this.state.isFullScreen}
            onChange={isFullScreen => this.setState({isFullScreen})}
          >
            <PlayingArea/>
          </Fullscreen>

          <BottomButtonWrap>
            { isSidebarOpen ? (
              <HamburgerBtn onClick={this.toggleSidebar} text="X" type="hamburger" />
            ) : (
              <HamburgerBtn onClick={this.toggleSidebar} text="?" type="hamburger" />
            )}

            <FullscreenBtn onClick={this.toggleFullScreen} text="Fullscreen" type="fullscreen" />
          </BottomButtonWrap>
        </div>
      </GameWrap>
    )
  }
}

export default App
