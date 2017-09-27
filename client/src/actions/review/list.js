import reviewFetch from '../../api/reviewFetch';

export function error(error) {
  return {type: 'REVIEW_LIST_ERROR', error};
}

export function loading(loading) {
  return {type: 'REVIEW_LIST_LOADING', loading};
}

export function success(items) {
  return {type: 'REVIEW_LIST_SUCCESS', items};
}

export function view(items) {
  return { type: 'REVIEW_LIST_VIEW', items};
}

export function page(page) {
  return (dispatch) => {
    dispatch(loading(true));
    dispatch(error(''));

    reviewFetch(page)
      .then(response => response.json())
      .then(data => {
        dispatch(loading(false));
        dispatch(success(data['hydra:member']));
        dispatch(view(data['hydra:view']));
      })
      .catch(e => {
        dispatch(loading(false));
        dispatch(error(e.message))
      });
  };
}

export function list() {
  return page('/reviews');
}

export function reset() {
  return {type: 'REVIEW_LIST_RESET'};
}
