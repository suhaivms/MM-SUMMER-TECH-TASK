package com.example.suhaiv.calculator;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;


public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    Button bAdd, bSub, bPro, bDiv, bClr;
    EditText input1, input2;
    TextView ans;
    float num1, num2, a;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        bAdd = (Button) findViewById(R.id.add);
        bSub = (Button) findViewById(R.id.sub);
        bPro = (Button) findViewById(R.id.pro);
        bDiv = (Button) findViewById(R.id.div);
        bClr = (Button) findViewById(R.id.clr);
        input1 = (EditText) findViewById(R.id.et1);
        input2 = (EditText) findViewById(R.id.et2);
        ans = (TextView) findViewById(R.id.out);

        bAdd.setOnClickListener(this);
        bSub.setOnClickListener(this);
        bPro.setOnClickListener(this);
        bDiv.setOnClickListener(this);
        bClr.setOnClickListener(this);

    }

    @Override
    public void onClick(View v) {
        num1 = Float.parseFloat(input1.getText().toString());
        num2 = Float.parseFloat(input2.getText().toString());

        switch (v.getId()) {
            case R.id.add:
                a = num1 + num2;
                ans.setText("Ans = " + Float.toString(a));
                break;
            case R.id.sub:
                a = num1 - num2;
                ans.setText("Ans = " + Float.toString(a));
                break;
            case R.id.pro:
                a = num1 * num2;
                ans.setText("Ans = " + Float.toString(a));
                break;
            case R.id.div:
                a = num1 / num2;
                ans.setText("Ans = " + Float.toString(a));
                break;
            case R.id.clr:
                ans.setText(null);
                input1.setText(null);
                input2.setText(null);
                break;
        }
    }
}

