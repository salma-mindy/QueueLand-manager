import { Injectable, Output, EventEmitter } from '@angular/core';
import { map } from 'rxjs/operators';
import { HttpClient } from '@angular/common/http';
import { Users } from './users';
import { stringify } from '@angular/compiler/src/util';


@Injectable({
  providedIn: 'root'
})
export class ApiService {
redirectUrl: string;
baseUrl: string = 'http://localhost:8090/Queueland/back-end';
@Output() getLoggedInName: EventEmitter<any> = new EventEmitter();
  constructor(private httpClient:HttpClient) { 
    
  }

  public userlogin(username, motDePasse){
    alert(username)
    return this.httpClient.post<any>(this.baseUrl + '/user-login', {
      username, motDePasse
    }).pipe(map(Users => {
      this.setToken(Users[0].fullName);
      this.getLoggedInName.emit(true); 
      return Users;
    }));

  }

  public userregistration(fullName, email, phoneNumber, pwd){
    return this.httpClient.post<any>(this.baseUrl + '/user-register', {
      fullName, email, phoneNumber, pwd
    }).pipe(map(Users => {
      return Users;
    }));
  }

  //token
  setToken(token: string){
    localStorage.setItem('token', token);
  }
  getToken(){
    return localStorage.getItem('token');
  }
  deleteToken(){
    localStorage.removeItem('token');
  }
  isLoggedIn(){
    const userToken = this.getToken();
    if(userToken != null){
      return true
    }
    return false;
  }
}