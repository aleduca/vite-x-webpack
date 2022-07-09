import './style.css'
import http from './services/http';

const btn_get_users = document.querySelector('#btn-get-users');

btn_get_users.addEventListener('click', async(event) => {
  try {
    const {data} = await http.get('/api/users');
    console.log(data);
  } catch (error) {
      console.log(error);
  }
});