export class Users{
    public Id: number;
    public fullName: string;
    public email: string;
    public phoneNumber: string;
    public pwd: string;

    constructor(Id: number, fullName: string, email: string, phoneNumber: string, pwd: string){
        this.Id = Id;
        this.fullName = fullName;
        this.email = email;
        this.phoneNumber = phoneNumber;
        this.pwd = pwd;
    }
}