package com.example.user.searchablerecyclerview.Activities;

import android.content.Intent;
import android.os.Handler;
import android.support.design.widget.CoordinatorLayout;
import android.support.v4.view.MenuItemCompat;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ProgressBar;
import android.widget.SearchView;

import com.example.user.searchablerecyclerview.Adapters.ApplianceAdapter;
import com.example.user.searchablerecyclerview.NetCalls.MakeNetCalls;
import com.example.user.searchablerecyclerview.R;
import com.example.user.searchablerecyclerview.models.LgAc;
import com.example.user.searchablerecyclerview.models.LgMobiles;
import com.example.user.searchablerecyclerview.models.LgTv;
import com.example.user.searchablerecyclerview.models.PanasonicAC;
import com.example.user.searchablerecyclerview.models.SamsungAc;
import com.example.user.searchablerecyclerview.models.SamsungMobiles;
import com.example.user.searchablerecyclerview.models.SamsungTv;
import com.example.user.searchablerecyclerview.models.SonyMobiles;
import com.example.user.searchablerecyclerview.models.SonyTv;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Timer;
import java.util.TimerTask;

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.OnClick;

public class ApplianceActivity extends AppCompatActivity implements SwipeRefreshLayout.OnRefreshListener, MakeNetCalls.CallBack, SearchView.OnQueryTextListener, ApplianceAdapter.LayoutClickListener {
    @BindView(R.id.applianceRecyclerView)
    RecyclerView mApplianceRecyclerView;
    @BindView(R.id.swipeToRefresh)
    SwipeRefreshLayout mSwipeRefreshLayout;
    @BindView(R.id.progressBar)
    ProgressBar mProgressBar;
    private RecyclerView.LayoutManager mLayoutManager;
    private ApplianceAdapter mApplianceAdapter;
    private Timer mTimer;
    private String mInput;
    private Runnable mRunnable;
    private String mQuery;
    ArrayAdapter mArrayAdapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_appliance);
        ButterKnife.bind(this);
        mLayoutManager = new LinearLayoutManager(getApplicationContext());
        mApplianceRecyclerView.setLayoutManager(mLayoutManager);
        mApplianceRecyclerView.setHasFixedSize(true);
        final Handler handler = new Handler();
        mRunnable = new Runnable() {
            @Override
            public void run() {
                mInput = getIntent().getExtras().getString("search input").toLowerCase();

                if (mInput.contains("tv") || mInput.contains("ac") || mInput.contains("mobiles")) {
                    MakeNetCalls.getInstance().getProductValues(ApplianceActivity.this,
                            "http://www.mocky.io/v2/5ad704012e00007800c93ce2");
                    mSwipeRefreshLayout.setOnRefreshListener(ApplianceActivity.this);
                }/* else if (mInput.contains("ac") || mInput.contains("air")) {
                    MakeNetCalls.getInstance().getProductValues(ApplianceActivity.this,
                            "http://www.mocky.io/v2/5ad704012e00007800c93ce2");
                    mSwipeRefreshLayout.setOnRefreshListener(ApplianceActivity.this);
                }*/

            }
        };

        mTimer = new Timer();
        mTimer.schedule(new TimerTask() {
            @Override
            public void run() {
                handler.post(mRunnable);
            }
        }, 1000, 1000);
        mApplianceAdapter = new ApplianceAdapter();
        mApplianceRecyclerView.setAdapter(mApplianceAdapter);
        mApplianceAdapter.setLayoutClickListener(this);


    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        return super.onOptionsItemSelected(item);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.searchview, menu);
        MenuItem menuItem = menu.findItem(R.id.searchProducts);

        SearchView searchView = (SearchView) menuItem.getActionView();
        search(searchView);
        return true;
    }

    private void search(SearchView searchView) {
        searchView.setOnQueryTextListener(this);
    }

    @Override
    public void onRefresh() {
        if (MakeNetCalls.getInstance() != null) {
            if (mInput.contains("tv") || mInput.contains("ac") || mInput.contains("mobile")) {
                MakeNetCalls.getInstance().getProductValues(ApplianceActivity.this,
                        "http://www.mocky.io/v2/5ad704012e00007800c93ce2");
            } /*else if (mInput.contains("ac") || mInput.contains("air") || mInput.contains("Mobiles")) {
                MakeNetCalls.getInstance().getProductValues(ApplianceActivity.this,
                        "http://www.mocky.io/v2/5ad704012e00007800c93ce2");
            }*/
        }
    }


    @Override
    public void onSuccess(final List<Object> sellersData) {
        this.runOnUiThread(new Runnable() {
            public void run() {
                if (mApplianceAdapter != null)
                    mApplianceAdapter.setData(sellersData);
                mSwipeRefreshLayout.setRefreshing(false);
                // mArrayAdapter=new ArrayAdapter(ApplianceActivity.this,android.R.layout.simple_dropdown_item_1line,sellersData);
                mProgressBar.bringToFront();
            }
        });
        mRunnable = new Runnable() {
            @Override
            public void run() {
                mProgressBar.setVisibility(View.GONE);
                mTimer.cancel();
            }
        };

    }

    @Override
    public boolean onQueryTextSubmit(String query) {
        return false;
    }

    @Override
    public boolean onQueryTextChange(String newText) {
        mArrayAdapter.getFilter().filter(newText);
        return false;
    }

    @Override
    public void onClick(Object applianceData) {
        if (applianceData instanceof SonyTv) {
            startActivity(new Intent(getApplicationContext(), PriceComparisionActivity.class)
                    .putExtra("applainceName", ((SonyTv) applianceData).applianceName)
                    .putExtra("imageURL", ((SonyTv) applianceData).imageUrl)
                    .putExtra("croma", ((SonyTv) applianceData).croma)
                    .putExtra("relianceDigi", ((SonyTv) applianceData).relianceDigital)
                    .putExtra("tatacliq", ((SonyTv) applianceData).tatacliq)
                    .putExtra("rating", ((SonyTv) applianceData).rating));
        } else if (applianceData instanceof LgTv) {
            startActivity(new Intent(getApplicationContext(), PriceComparisionActivity.class)
                    .putExtra("applainceName", ((LgTv) applianceData).applianceName)
                    .putExtra("imageURL", ((LgTv) applianceData).imageUrl)
                    .putExtra("croma", ((LgTv) applianceData).croma)
                    .putExtra("relianceDigi", ((LgTv) applianceData).relianceDigital)
                    .putExtra("baja", ((LgTv) applianceData).bajajElectronics)
                    .putExtra("rating", ((LgTv) applianceData).rating));
        } else if (applianceData instanceof LgMobiles) {
            startActivity(new Intent(getApplicationContext(), PriceComparisionActivity.class)
                    .putExtra("applainceName", ((LgMobiles) applianceData).applianceName)
                    .putExtra("imageURL", ((LgMobiles) applianceData).imageUrl)
                    .putExtra("croma", ((LgMobiles) applianceData).croma)
                    .putExtra("relianceDigi", ((LgMobiles) applianceData).relianceDigital)
                    .putExtra("baja", ((LgMobiles) applianceData).bajajElectronics)
                    .putExtra("rating", ((LgMobiles) applianceData).rating));
        } else if (applianceData instanceof SamsungMobiles) {
            startActivity(new Intent(getApplicationContext(), PriceComparisionActivity.class)
                    .putExtra("applainceName", ((SamsungMobiles) applianceData).applianceName)
                    .putExtra("imageURL", ((SamsungMobiles) applianceData).imageUrl)
                    .putExtra("croma", ((SamsungMobiles) applianceData).croma)
                    .putExtra("relianceDigi", ((SamsungMobiles) applianceData).relianceDigital)
                    .putExtra("baja", ((SamsungMobiles) applianceData).bajajElectronics)
                    .putExtra("rating", ((SamsungMobiles) applianceData).rating));
        } else if (applianceData instanceof SamsungTv) {
            startActivity(new Intent(getApplicationContext(), PriceComparisionActivity.class)
                    .putExtra("applainceName", ((SamsungTv) applianceData).applianceName)
                    .putExtra("imageURL", ((SamsungTv) applianceData).imageUrl)
                    .putExtra("croma", ((SamsungTv) applianceData).croma)
                    .putExtra("relianceDigi", ((SamsungTv) applianceData).relianceDigital)
                    .putExtra("baja", ((SamsungTv) applianceData).bajajElectronics)
                    .putExtra("rating", ((SamsungTv) applianceData).rating));
        } else if (applianceData instanceof SamsungAc) {
            startActivity(new Intent(getApplicationContext(), PriceComparisionActivity.class)
                    .putExtra("applainceName", ((SamsungAc) applianceData).applianceName)
                    .putExtra("imageURL", ((SamsungAc) applianceData).imageUrl)
                    .putExtra("croma", ((SamsungAc) applianceData).croma)
                    .putExtra("relianceDigi", ((SamsungAc) applianceData).relianceDigital)
                    .putExtra("baja", ((SamsungAc) applianceData).bajajElectronics)
                    .putExtra("rating", ((SamsungAc) applianceData).rating));
        } else if (applianceData instanceof LgAc) {
            startActivity(new Intent(getApplicationContext(), PriceComparisionActivity.class)
                    .putExtra("applainceName", ((LgAc) applianceData).applianceName)
                    .putExtra("imageURL", ((LgAc) applianceData).imageUrl)
                    .putExtra("croma", ((LgAc) applianceData).croma)
                    .putExtra("relianceDigi", ((LgAc) applianceData).relianceDigital)
                    .putExtra("baja", ((LgAc) applianceData).bajajElectronics)
                    .putExtra("rating", ((LgAc) applianceData).rating));
        } else if (applianceData instanceof SonyMobiles) {
            startActivity(new Intent(getApplicationContext(), PriceComparisionActivity.class)
                    .putExtra("applainceName", ((SonyMobiles) applianceData).applianceName)
                    .putExtra("imageURL", ((SonyMobiles) applianceData).imageUrl)
                    .putExtra("croma", ((SonyMobiles) applianceData).croma)
                    .putExtra("relianceDigi", ((SonyMobiles) applianceData).relianceDigital)
                    .putExtra("baja", ((SonyMobiles) applianceData).bajajElectronics)
                    .putExtra("rating", ((SonyMobiles) applianceData).rating));
        } else if (applianceData instanceof PanasonicAC) {
            startActivity(new Intent(getApplicationContext(), PriceComparisionActivity.class)
                    .putExtra("applainceName", ((PanasonicAC) applianceData).applianceName)
                    .putExtra("imageURL", ((PanasonicAC) applianceData).imageUrl)
                    .putExtra("croma", ((PanasonicAC) applianceData).croma)
                    .putExtra("relianceDigi", ((PanasonicAC) applianceData).relianceDigital)
                    .putExtra("baja", ((PanasonicAC) applianceData).bajajElectronics)
                    .putExtra("rating", ((PanasonicAC) applianceData).rating));
        }

    }
}
