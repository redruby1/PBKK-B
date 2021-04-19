using System;
using System.Collections.Generic;
using System.Text;

namespace LatihanItemPenjualan
{
    class ItemPenjualanViewModel : System.ComponentModel.INotifyPropertyChanged
    {
        public event System.ComponentModel.PropertyChangedEventHandler PropertyChanged;

        private ItemPenjualan model;

        public ItemPenjualanViewModel(ItemPenjualan itemPenjualan = null)
        {
            this.model = itemPenjualan ?? new ItemPenjualan();
        }

        public string NamaBarang
        {
            get { return model.NamaBarang; }
            set
            {
                if (value != model.NamaBarang)
                {
                    model.NamaBarang = value;
                    PropertyChanged(this, new System.ComponentModel.PropertyChangedEventArgs("NamaBarang"));
                }
            }
        }

        public int Jumlah
        {
            get { return model.Jumlah; }
            set
            {
                if (value != model.Jumlah)
                {
                    model.Jumlah = value;
                    PropertyChanged(this, new System.ComponentModel.PropertyChangedEventArgs("Jumlah"));
                    PropertyChanged(this, new System.ComponentModel.PropertyChangedEventArgs("Total"));
                }
            }
        }

        public decimal Harga
        {
            get { return model.Harga; }
            set
            {
                if (value != model.Harga)
                {
                    model.Harga = value;
                    PropertyChanged(this, new System.ComponentModel.PropertyChangedEventArgs("Harga"));
                    PropertyChanged(this, new System.ComponentModel.PropertyChangedEventArgs("Total"));
                }
            }
        }

        public decimal DiskonPersen
        {
            get { return model.DiskonPersen; }
            set
            {
                if (value != model.DiskonPersen)
                {
                    model.DiskonPersen = value;
                    PropertyChanged(this, new System.ComponentModel.PropertyChangedEventArgs("DiskonPersen"));
                    PropertyChanged(this, new System.ComponentModel.PropertyChangedEventArgs("Total"));
                }
            }
        }

        public string Total
        {
            get
            {
                decimal? total = model.Total();
                if (!total.HasValue)
                {
                    return "-";
                }
                else
                {
                    return total.Value.ToString("C");
                }
            }
        }

        public ItemPenjualan Model
        {
            get { return this.model; }
        }
    }
}
