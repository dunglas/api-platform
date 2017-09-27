import React from 'react';
import {Route} from 'react-router-dom';

import {
  List as ReviewList,
  Create as ReviewCreate,
  Update as ReviewUpdate,
  Show as ReviewShow
} from '../components/review/';

export default (
  [
    <Route path='/reviews/' component={ ReviewList } exact={true} strict={true} key='ReviewList'/>,
    <Route path='/reviews/create' component={ ReviewCreate } exact={true} key='ReviewCreate'/>,
    <Route path="/reviews/edit/:id" component={ ReviewUpdate } exact={true} key='ReviewUpdate'/>,
    <Route path="/reviews/show/:id" component={ ReviewShow } exact={true} key='ReviewShow'/>
  ]
);
