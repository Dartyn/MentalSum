package com.example.a16022667.mentalsum;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {
    WebView mywebView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        getSupportActionBar().hide();

        mywebView = findViewById(R.id.webview);
        WebSettings websettings = mywebView.getSettings();
        websettings.setJavaScriptEnabled(true);
        websettings.setLoadWithOverviewMode(true);
        websettings.setUseWideViewPort(true);

        mywebView.loadUrl("http://10.0.2.2/SecondApp/index.php");
        mywebView.setWebViewClient(new WebViewClient());
    }
}
