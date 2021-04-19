using System;
using System.Collections.Generic;
using System.Text;

namespace LatihanItemPenjualan
{
    class ItemPenjualan
    {
        public ItemPenjualan()
        {
            DiskonPersen = 0;
        }

        public long Id { get; set; }

        public string NamaBarang { get; set; }

        public int Jumlah { get; set; }

        public decimal Harga { get; set; }

        public decimal DiskonPersen { get; set; }

        public decimal Total()
        {
            decimal total = Jumlah * Harga;
            return total - (DiskonPersen / 100 * total);
        }
    }
}
