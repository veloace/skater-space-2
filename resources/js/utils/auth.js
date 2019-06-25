class AuthService {

    constructor() {
        this.booted = false;
        this.user = {//list out the object prototype (even though we don't have to) just to be clear.
            'is_authenticated': false,
            'name': null,
            'is_email_verified': false,
            'pending_notifications': 0,
            'unread_messages': 0,
            'preferences': {},
        };
    }

    login(username,password)
    {

    }


    logout()
    {

    }

    register()
    {

    }

     boot()
    {
        window.axios.get('/webAPI/user')
            .then((response)=>{
                this.booted = true;
                this.user.is_authenticated=true;
                this.user.name=response.data.name;
                this.user.is_email_verified=response.data.is_email_verified;
            })
            .catch(()=>{
                this.user.is_authenticated=false;
                this.user.name=null;
                this.booted = true;
            })
    }
}

const auth  = new AuthService();//global auth service
export default auth;