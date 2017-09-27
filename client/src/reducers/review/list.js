import {combineReducers} from 'redux'

export function error(state = null, action) {
  switch (action.type) {
    case 'REVIEW_LIST_ERROR':
      return action.error;

    case 'REVIEW_LIST_RESET':
      return null;

    default:
      return state;
  }
}

export function loading(state = false, action) {
  switch (action.type) {
    case 'REVIEW_LIST_LOADING':
      return action.loading;

    case 'REVIEW_LIST_RESET':
      return false;

    default:
      return state;
  }
}

export function items(state = [], action) {
  switch (action.type) {
    case 'REVIEW_LIST_SUCCESS':
      return action.items;

    case 'REVIEW_LIST_RESET':
      return [];

    default:
      return state;
  }
}

export function view(state = [], action) {
  switch (action.type) {
    case 'REVIEW_LIST_VIEW':
      return action.items;

    default:
      return state;
  }
}

export default combineReducers({error, loading, items, view});
