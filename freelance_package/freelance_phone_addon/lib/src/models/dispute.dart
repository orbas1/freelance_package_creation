import 'package:equatable/equatable.dart';

class Dispute extends Equatable {
  const Dispute({
    required this.id,
    required this.subject,
    required this.status,
    this.referenceType,
    this.referenceId,
    this.createdAt,
    this.messages = const [],
  });

  final int id;
  final String subject;
  final String status;
  final String? referenceType;
  final int? referenceId;
  final String? createdAt;
  final List<String> messages;

  factory Dispute.fromJson(Map<String, dynamic>? json) {
    if (json == null) {
      return const Dispute(id: 0, subject: '', status: 'open');
    }
    return Dispute(
      id: json['id'] is int ? json['id'] : int.tryParse(json['id']?.toString() ?? '') ?? 0,
      subject: json['subject']?.toString() ?? json['reason']?.toString() ?? '',
      status: json['status']?.toString() ?? 'open',
      referenceType: json['reference_type']?.toString(),
      referenceId: json['reference_id'] is int
          ? json['reference_id']
          : int.tryParse(json['reference_id']?.toString() ?? ''),
      createdAt: json['created_at']?.toString(),
      messages: (json['messages'] as List?)
              ?.map((message) => message.toString())
              .toList() ??
          const <String>[],
    );
  }

  Map<String, dynamic> toJson() => {
        'id': id,
        'subject': subject,
        'status': status,
        'reference_type': referenceType,
        'reference_id': referenceId,
        'created_at': createdAt,
        'messages': messages,
      };

  @override
  List<Object?> get props => [id, subject, status, referenceType, referenceId, createdAt, messages];
}
