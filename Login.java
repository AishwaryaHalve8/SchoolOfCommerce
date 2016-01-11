package com.aish.hi.weship;

import android.app.Activity;
import android.content.Intent;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;


public class Login extends Activity implements View.OnClickListener {

    Button login,loginfordriver;
    TextView mobileemailofuserlogin,passwordofuserlogin;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        login= (Button) findViewById(R.id.loginbuttonforusers);
        loginfordriver= (Button) findViewById(R.id.loginactivityfordriver);

        mobileemailofuserlogin= (TextView) findViewById(R.id.mobileemailofuserlogin);
        passwordofuserlogin= (TextView) findViewById(R.id.passwordofuserlogin);

        login.setOnClickListener(this);
        loginfordriver.setOnClickListener(this);
    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_login, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    @Override
    public void onClick(View v) {
        if(v.getId()==R.id.loginbuttonforusers)
        {

            startActivity(new Intent(Login.this,MapsActivity.class));

        }

        if (v.getId()==R.id.loginactivityfordriver)
        {
            startActivity(new Intent(Login.this,Driver_Login.class));
        }
    }
}
