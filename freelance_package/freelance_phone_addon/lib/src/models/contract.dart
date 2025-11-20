import 'package:equatable/equatable.dart';

import 'bid.dart';

class Contract extends Equatable {
  const Contract({
    required this.id,
    required this.status,
    required this.total,
    this.bid,
    this.dueDate,
  });

  final int id;
  final String status;
  final double total;
  final Bid? bid;
  final String? dueDate;

  factory Contract.fromJson(Map<String, dynamic>? json) {
    if (json == null) {
      return const Contract(id: 0, status: 'draft', total: 0);
    }
    return Contract(
      id: json['id'] is int ? json['id'] : int.tryParse(json['id']?.toString() ?? '') ?? 0,
      status: json['status']?.toString() ?? 'draft',
      total: json['total'] is num
          ? (json['total'] as num).toDouble()
          : double.tryParse(json['total']?.toString() ?? '') ?? 0,
      bid: Bid.fromJson(json['bid'] as Map<String, dynamic>?),
      dueDate: json['due_date']?.toString(),
    );
  }

  Map<String, dynamic> toJson() => {
        'id': id,
        'status': status,
        'total': total,
        'bid': bid?.toJson(),
        'due_date': dueDate,
      };

  @override
  List<Object?> get props => [id, status, total, bid, dueDate];
}
